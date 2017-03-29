<?php
namespace Application\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SeedRunCommand extends Command
{
    protected function configure()
    {
        $this
        ->setName('seed:run')
        ->setDescription('Run seed file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(exec('vendor\\bin\\phinx seed:run '));

        return 0;
    }
}
/* End of file SeedRunCommand.php */
/* Location: ./application/commands/SeedRunCommand.php */
