<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('migrate')
            ->setDescription('Run migration file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(exec('vendor\\bin\\phinx migrate'));

        return 0;
    }
}

/* End of file MigrateCommand.php */
/* Location: .//D/#Development/#Github/codeigniter-starterkit/console/MigrateCommand.php */
