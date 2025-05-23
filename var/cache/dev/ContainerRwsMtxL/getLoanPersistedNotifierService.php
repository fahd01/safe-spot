<?php

namespace ContainerRwsMtxL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoanPersistedNotifierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\LoanPersistedNotifier' shared autowired service.
     *
     * @return \App\EventListener\LoanPersistedNotifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/LoanPersistedNotifier.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';

        $a = ($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'));

        if (isset($container->privates['App\\EventListener\\LoanPersistedNotifier'])) {
            return $container->privates['App\\EventListener\\LoanPersistedNotifier'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['App\\EventListener\\LoanPersistedNotifier'])) {
            return $container->privates['App\\EventListener\\LoanPersistedNotifier'];
        }

        return $container->privates['App\\EventListener\\LoanPersistedNotifier'] = new \App\EventListener\LoanPersistedNotifier(($container->privates['App\\Repository\\AutomationRepository'] ?? $container->load('getAutomationRepositoryService')), ($container->privates['App\\Repository\\LoanRepository'] ?? $container->load('getLoanRepositoryService')), ($container->privates['App\\Repository\\BidRepository'] ?? self::getBidRepositoryService($container)), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), new \Symfony\Component\Mailer\Mailer($a, ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container)), $b), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));
    }
}
