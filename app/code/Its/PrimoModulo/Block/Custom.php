<?php
namespace Its\PrimoModulo\Block;

use Magento\Framework\View\Element\Template;

class Custom extends Template
{

    protected $_customer;
    protected $_productloader;
    protected $imageHelper;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Customer\Model\SessionFactory $customerSessionFactory,
        \Magento\Customer\Model\Customer $customer,
        \Magento\Catalog\Model\ProductFactory $_productloader,
        \Magento\Catalog\Helper\Image $imageHelper,
        array $data = []
    )
    {
        $this->customerSession = $customerSession;
        $this->customerSessionFactory = $customerSessionFactory;
        $this->customer = $customer;
        $this->_productloader = $_productloader;
        $this->imageHelper = $imageHelper;
        parent::__construct($context, $data);
    }

    public function getCustomerName()
    {
        $idCustomer = 1;
        $customerObj = $this->customer->load($idCustomer);

        return $customerObj->getFirstname();
    }

    public function checkCustomer()
    {
        $customer = $this->customerSessionFactory->create();
        $customerSession = $this->customerSession;

        if ($customerSession->isLoggedIn()) {
            $customerId = $customerSession->getCustomer()->getId();
            $customerData = $this->customer->load($customerId);
            return $customerData;
        };
    }

    public function getLoadProduct($id)
    {
        return $this->_productloader->create()->load($id);
    }

    public function getProductImage($id)
    {
        $product = $this->_productloader->create()->load($id);
        $url = $this->imageHelper->init($product, 'product_base_image')->getUrl();
        return $url;
    }

    // public function checkCustomerOM()
    // {
    //     $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    //     $customerSession = $objectManager->get('Magento\Customer\Model\Session');
    //     if ($customerSession->isLoggedIn()) {
    //         $customerId = $customerSession->getCustomer()->getId();
    //         $customerFirstname = $customerSession->getCustomer()->getFirstname();
    //         $customerLastname = $customerSession->getCustomer()->getLastname();
    //         $customerEmail = $customerSession->getCustomer()->getEmail();
    //         echo "<h3>Hello, " . $customerFirstname . "</h3>" . "<br />";
    //         echo "First Name: " . "<strong>" . $customerFirstname . "</strong><br />";
    //         echo "Last Name: " . "<strong>" . $customerLastname . "</strong><br />";
    //         echo "Email: " . "<strong>" . $customerEmail . "</strong><br />";
    //         echo "<a class=\"header_account_link\" href=\"" . $this->getUrl("customer/account/") . "\">My Account</a>";
    //     } else {
    //         echo "<h3>You are not logged in</h3>" . "<br />";
    //         echo "<a class=\"header_account_link\" href=\"" . $this->getUrl("customer/account/login") . "\">Sign in</a>";
    //         echo " or ";
    //         echo "<a class=\"header_account_link\" href=\"" . $this->getUrl("customer/account/create") . "\">create an Account</a>";
    //     }
    // }

    public function printString()
    {
        $string = 'Custom block test.';

        return $string;
    }
}