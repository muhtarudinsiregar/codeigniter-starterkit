<?php
namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('make:migration')
            ->setDescription('Create migration file')
            ->addArgument('filename', InputArgument::REQUIRED, 'Migrate file name is required');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filename = $input->getArgument('filename');

        $output->writeln(exec('vendor\\bin\\phinx create '.$filename));

        return 0;
    }
}

/* End of file MigrateCommand.php */
/* Location: .//D/#Development/#Github/codeigniter-starterkit/console/MigrateCommand.php */
