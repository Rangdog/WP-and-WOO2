<?php

namespace MailPoetDoctrineProxies\__CG__\MailPoet\Entities;

if (!defined('ABSPATH')) exit;



/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SubscriberEntity extends \MailPoet\Entities\SubscriberEntity implements \MailPoetVendor\Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);
        return parent::__get($name);
    }





    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'wpUserId', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'isWoocommerceUser', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'firstName', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastName', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'email', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'status', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'subscribedIp', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'confirmedIp', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'confirmedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastSubscribedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'unconfirmedData', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'source', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'countConfirmations', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'unsubscribeToken', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'linkToken', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'engagementScore', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'engagementScoreUpdatedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastEngagementAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastSendingAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastOpenAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastClickAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastPurchaseAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastPageViewAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'woocommerceSyncedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'emailCount', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'subscriberSegments', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'subscriberCustomFields', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'subscriberTags', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'scheduledTaskSubscribers', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'id', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'updatedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'deletedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'validationGroups'];
        }

        return ['__isInitialized__', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'wpUserId', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'isWoocommerceUser', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'firstName', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastName', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'email', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'status', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'subscribedIp', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'confirmedIp', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'confirmedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastSubscribedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'unconfirmedData', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'source', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'countConfirmations', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'unsubscribeToken', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'linkToken', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'engagementScore', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'engagementScoreUpdatedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastEngagementAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastSendingAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastOpenAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastClickAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastPurchaseAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'lastPageViewAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'woocommerceSyncedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'emailCount', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'subscriberSegments', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'subscriberCustomFields', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'subscriberTags', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'scheduledTaskSubscribers', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'id', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'createdAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'updatedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'deletedAt', '' . "\0" . 'MailPoet\\Entities\\SubscriberEntity' . "\0" . 'validationGroups'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SubscriberEntity $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getWpUserId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWpUserId', []);

        return parent::getWpUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setWpUserId($wpUserId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWpUserId', [$wpUserId]);

        return parent::setWpUserId($wpUserId);
    }

    /**
     * {@inheritDoc}
     */
    public function isWPUser(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isWPUser', []);

        return parent::isWPUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsWoocommerceUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsWoocommerceUser', []);

        return parent::getIsWoocommerceUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsWoocommerceUser($isWoocommerceUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsWoocommerceUser', [$isWoocommerceUser]);

        return parent::setIsWoocommerceUser($isWoocommerceUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscribedIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscribedIp', []);

        return parent::getSubscribedIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscribedIp($subscribedIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscribedIp', [$subscribedIp]);

        return parent::setSubscribedIp($subscribedIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmedIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmedIp', []);

        return parent::getConfirmedIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmedIp($confirmedIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmedIp', [$confirmedIp]);

        return parent::setConfirmedIp($confirmedIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmedAt', []);

        return parent::getConfirmedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmedAt($confirmedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmedAt', [$confirmedAt]);

        return parent::setConfirmedAt($confirmedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastSubscribedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastSubscribedAt', []);

        return parent::getLastSubscribedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastSubscribedAt($lastSubscribedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastSubscribedAt', [$lastSubscribedAt]);

        return parent::setLastSubscribedAt($lastSubscribedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnconfirmedData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnconfirmedData', []);

        return parent::getUnconfirmedData();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnconfirmedData($unconfirmedData)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnconfirmedData', [$unconfirmedData]);

        return parent::setUnconfirmedData($unconfirmedData);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', []);

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', [$source]);

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirmationsCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirmationsCount', []);

        return parent::getConfirmationsCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirmationsCount($countConfirmations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirmationsCount', [$countConfirmations]);

        return parent::setConfirmationsCount($countConfirmations);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnsubscribeToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnsubscribeToken', []);

        return parent::getUnsubscribeToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnsubscribeToken($unsubscribeToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnsubscribeToken', [$unsubscribeToken]);

        return parent::setUnsubscribeToken($unsubscribeToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinkToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinkToken', []);

        return parent::getLinkToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinkToken($linkToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinkToken', [$linkToken]);

        return parent::setLinkToken($linkToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriberSegments(string $status = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriberSegments', [$status]);

        return parent::getSubscriberSegments($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getSegments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegments', []);

        return parent::getSegments();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriberCustomFields()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriberCustomFields', []);

        return parent::getSubscriberCustomFields();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriberCustomField(\MailPoet\Entities\CustomFieldEntity $customField): ?\MailPoet\Entities\SubscriberCustomFieldEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriberCustomField', [$customField]);

        return parent::getSubscriberCustomField($customField);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriberTags()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriberTags', []);

        return parent::getSubscriberTags();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubscriberTag(\MailPoet\Entities\TagEntity $tag): ?\MailPoet\Entities\SubscriberTagEntity
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriberTag', [$tag]);

        return parent::getSubscriberTag($tag);
    }

    /**
     * {@inheritDoc}
     */
    public function getEngagementScore(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEngagementScore', []);

        return parent::getEngagementScore();
    }

    /**
     * {@inheritDoc}
     */
    public function setEngagementScore(?float $engagementScore): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEngagementScore', [$engagementScore]);

        parent::setEngagementScore($engagementScore);
    }

    /**
     * {@inheritDoc}
     */
    public function getEngagementScoreUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEngagementScoreUpdatedAt', []);

        return parent::getEngagementScoreUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setEngagementScoreUpdatedAt(?\DateTimeInterface $engagementScoreUpdatedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEngagementScoreUpdatedAt', [$engagementScoreUpdatedAt]);

        parent::setEngagementScoreUpdatedAt($engagementScoreUpdatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastEngagementAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastEngagementAt', []);

        return parent::getLastEngagementAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastEngagementAt(\DateTimeInterface $lastEngagementAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastEngagementAt', [$lastEngagementAt]);

        parent::setLastEngagementAt($lastEngagementAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastSendingAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastSendingAt', []);

        return parent::getLastSendingAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastSendingAt(?\DateTimeInterface $dateTime): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastSendingAt', [$dateTime]);

        parent::setLastSendingAt($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastOpenAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastOpenAt', []);

        return parent::getLastOpenAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastOpenAt(?\DateTimeInterface $dateTime): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastOpenAt', [$dateTime]);

        parent::setLastOpenAt($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastClickAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastClickAt', []);

        return parent::getLastClickAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastClickAt(?\DateTimeInterface $dateTime): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastClickAt', [$dateTime]);

        parent::setLastClickAt($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastPurchaseAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastPurchaseAt', []);

        return parent::getLastPurchaseAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastPurchaseAt(?\DateTimeInterface $dateTime): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastPurchaseAt', [$dateTime]);

        parent::setLastPurchaseAt($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastPageViewAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastPageViewAt', []);

        return parent::getLastPageViewAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastPageViewAt(?\DateTimeInterface $dateTime): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastPageViewAt', [$dateTime]);

        parent::setLastPageViewAt($dateTime);
    }

    /**
     * {@inheritDoc}
     */
    public function setWoocommerceSyncedAt(?\DateTimeInterface $woocommerceSyncedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWoocommerceSyncedAt', [$woocommerceSyncedAt]);

        parent::setWoocommerceSyncedAt($woocommerceSyncedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getWoocommerceSyncedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWoocommerceSyncedAt', []);

        return parent::getWoocommerceSyncedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCount(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCount', []);

        return parent::getEmailCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCount(int $emailCount): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCount', [$emailCount]);

        parent::setEmailCount($emailCount);
    }

    /**
     * {@inheritDoc}
     */
    public function cleanupSubscriberSegments(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cleanupSubscriberSegments', []);

        parent::cleanupSubscriberSegments();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt($deletedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getValidationGroups(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValidationGroups', []);

        return parent::getValidationGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function setValidationGroups(?array $validationGroups): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValidationGroups', [$validationGroups]);

        parent::setValidationGroups($validationGroups);
    }

}
