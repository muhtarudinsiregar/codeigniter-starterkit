<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SeedCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('make:seeder')
            ->setDescription('Make seed file')
            ->addArgument('seedName', InputArgument::REQUIRED, 'Seed file name is required');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $seedName = $input->getArgument('seedName');
        $output->writeln(exec('vendor\\bin\\phinx seed:create '.$seedName));

        return 0;
    }
}

/* End of file RollbackCommand.php */
/* Location: .//D/#Development/#Github/codeigniter-starterkit/console/RollbackCommand.php */
