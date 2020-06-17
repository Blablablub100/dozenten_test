<?php

namespace MyVendor\DozentenTest\Controller;

use Doctrine\DBAL\Query\QueryBuilder;
use MyVendor\DozentenTest\Domain\Repository\DozentRepository;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class DozentenTestController
 *
 * @package MyVendor\DozentenTest\Controller
 */
class DozentenTestController extends ActionController
{

    /**
     * @var DozentRepository
     */
    private $dozentenRepository;

    /**
     * Inject the product repository
     *
     * @param \MyVendor\DozentenTest\Domain\Repository\DozentRepository $dozentenRepository
     */
    public function injectDozentenRepository(DozentRepository $dozentenRepository)
    {
        $this->dozentenRepository = $dozentenRepository;
    }

    /**
     * List Action
     *
     * @return void
     */
    public function listAction()
    {
        $dozenten = $this->dozentenRepository->findAll();
        $this->view->assign('dozenten', $dozenten);

        // TODO remove
        /**
         * @var QueryBuilder $qb
         */
        $qb = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_dozententest_domain_model_dozent');
        $qb->select("*")->from("tx_dozententest_domain_model_dozent")
            ->where("name = :name")->setParameter("name", "Gerstemeier");
        $statement = $qb->getFirstResult();
        $this->view->assign('statement', $statement);
    }

    public function findByName() {
        /**
         * @var QueryBuilder $qb
         */
        $qb = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_dozententest_domain_model_dozent');
        $qb->select("*")->from("tx_dozententest_domain_model_dozent")
            ->where("name = :name")->setParameter("name", "Gerstemeier");
        $statement = $qb->execute();
        debug($statement);
    }
}
