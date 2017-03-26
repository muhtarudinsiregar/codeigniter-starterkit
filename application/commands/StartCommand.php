<?php
namespace Application\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StartCommand extends Command
{
    protected function configure()
    {
        $this
        ->setName('start')
        ->setDescription('Start Codeigniter App');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Your app start in localhost:8000");
        $output->writeln(exec('php -S localhost:8000'));

        return 0;
    }
}


/* End of file StartCommand.php */
/* Location: ./application/commands/StartCommand.php */
