<?php
namespace Application\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MakeControllerCommand extends Command
{
    // setting your command, here.
    protected function configure()
    {
        $this
            ->setName('make:controller')
            ->setDescription('Make Controller')
            ->addArgument('className', InputArgument::REQUIRED, 'Class name is required');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $fileName = $input->getArgument('className');
        
        $controllerPath = str_replace('commands', 'controllers', __DIR__);
        
        $filePath = $controllerPath.'\\'.$fileName.'.php';

        if (file_exists($filePath)) {
            $output->writeln("File already exist");
        } else {
            $this->createFile($filePath, $fileName);
            $output->writeln("Generate File ".$filePath);
        }
    }

    protected function createFile($filePath, $fileName)
    {
        $newFile = fopen($filePath, "w");

        if ($newFile) {
            // get file template and replace
            $template = file_get_contents(__DIR__."\\template\\controller.stub.php");
            $template = str_replace(":className", $fileName, $template);

            // copy template to new file
            fwrite($newFile, $template);

            fclose($newFile);
        }
    }
}
