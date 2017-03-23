<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RollbackCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('rollback')
            ->setDescription('Rollback migration and seed file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(exec('vendor\\bin\\phinx rollback'));

        return 0;
    }
}

/* End of file RollbackCommand.php */
/* Location: .//D/#Development/#Github/codeigniter-starterkit/console/RollbackCommand.php */
