<?php

namespace Devkind\WritesonicPhp\Endpoints;

/**
 * Endpoint class to get App Notifications from WriteSonic
 *
 *
 * <b> Notification messages for your apps, websites, and mobile devices that keep users coming back for more. </b>
 */
final class AppNotifications extends Endpoint
{
    public const ENDPOINT = '/v1/business/content/app-notifications';
    public const PARAMS = ['description'];

    /** @var array */
    protected array $payload =[];

    /** @var string */
    protected string $description;

    /**
     * Generates the content on the basis of required parameters.
     */
    public function generate(string $description)
    {
        $this->description = $description;
        $this->request(self::ENDPOINT, $this->toString());
    }

    /**
     * Accessor description attribute
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setDescription(string $value): self
    {
        $this->description = $value;
        return $this;
    }

    /**
     * Accessor for Payload attribute
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * Setter for payload attribute
     *
     * @return self
     */
    public function setPayload(array $value): self
    {
        $this->payload = $value;
        return $this;
    }

    /**
     * Accessor for endpoint attribute
     *
     * @return string
     */
    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * Accessor for getting Required Parameters attribute
     *
     * @return array
     */
    public function getRequiredParameters(): array
    {
        return self::PARAMS;
    }

    /**
     * Array representation of this endpoint
     *
     * @return array
     */
    public function toArray(): array
    {
        try {
            return [
                 "description" => $this->getDescription(),
            ];
        } catch (\Throwable $th) {
            throw new \InvalidArgumentException(explode(":", $th->getMessage())[1] ?? $th->getMessage());
        }
    }
}
