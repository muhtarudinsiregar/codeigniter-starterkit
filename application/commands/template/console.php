<?php
namespace Application\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TemplateCommand extends Command
{
    // setting your command, here.
    protected function configure()
    {
        $this
            ->setName('')
            ->setDescription('')
            ->addArgument('', InputArgument::REQUIRED, 'File name is required');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(" ");
        
        return 0;
    }
}
