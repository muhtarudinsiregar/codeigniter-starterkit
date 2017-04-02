<?php
namespace Application\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConsoleCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('make:console')
            ->setDescription('Make console file')
            ->addArgument('fileName', InputArgument::REQUIRED, 'File name is required');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $fileName = $input->getArgument('fileName');
        
        $filePath = __DIR__."\\".$fileName.".php";
        
        if (file_exists($filePath)) {
            $output->writeln("File already exist");
        } else {
            $this->createFile($filePath, $fileName);
            $output->writeln("Generate File ".$filePath);
        }

        return 0;
    }

    protected function createFile($filePath, $fileName)
    {
        $newFile = fopen($filePath, "w");

        if ($newFile) {
            // get file template and replace
            $template = file_get_contents(__DIR__."\\template\\console.php");
            $template = str_replace("TemplateCommand", $fileName, $template);

            // copy template to new file
            fwrite($newFile, $template);

            fclose($newFile);
        }
    }
}


/* End of file ConsoleCommand.php */
/* Location: ./application/commands/ConsoleCommand.php */
