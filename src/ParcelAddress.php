<?php


namespace Hiraya;


use GuzzleHttp\Exception\GuzzleException;

class ParcelAddress extends Auth
{
    const BASE_URI = 'https://api.nzpost.co.nz/parceladdress/2.0';

    /**
     * Returns a list of suggested domestic addresses for an address fragment.
     *
     * @param $q
     * @param int $count
     * @return array|bool|float|int|object|string|null
     * @throws GuzzleException
     */
    public function searchForAddress($q, $count = 10)
    {
        $uri = '/domestic/addresses';

        return $this->call(self::BASE_URI.$uri, [
            'q' => $q,
            'count' => $count,
        ]);
    }

    /**
     * Returns the detailed information for a single domestic address identifier.
     *
     * @param $address_id
     * @return array|bool|float|int|object|string|null
     * @throws GuzzleException
     */
    public function getAddressByAddressId($address_id)
    {
        $uri = "/domestic/addresses/$address_id";

        return $this->call(self::BASE_URI.$uri);
    }

    /**
     * Returns the detailed information for a single dpid.
     *
     * @param $dpid
     * @return array|bool|float|int|object|string|null
     * @throws GuzzleException
     */
    public function getAddressByDpid($dpid)
    {
        $uri = "/domestic/addresses/dpid/$dpid";

        return $this->call(self::BASE_URI.$uri);
    }

    /**
     * Returns a list of suggested domestic suburbs for a suburb fragment.
     *
     * @param $q
     * @param int $count
     * @return array|bool|float|int|object|string|null
     * @throws GuzzleException
     */
    public function searchForSuburbs($q, $count = 10)
    {
        $uri = '/domestic/suburbs';

        return $this->call(self::BASE_URI.$uri, [
            'q' => $q,
            'count' => $count,
        ]);
    }

    /**
     * Returns a list of parcel collection points nearest to the coordinates provided.
     *
     * @param $lat
     * @param $long
     * @param int $count
     * @return array|bool|float|int|object|string|null
     * @throws GuzzleException
     */
    public function getCollectionLocations($lat, $long, $count = 5)
    {
        $uri = '/domestic/pcdlocations';

        return $this->call(self::BASE_URI.$uri, [
            'latitude' => $lat,
            'longitude' => $long,
            'count' => $count,
        ]);
    }

    /**
     * Returns a list of suggested addresses for a given country code and address fragment.
     *
     * @param $q
     * @param string $code
     * @param int $count
     * @return array|bool|float|int|object|string|null
     * @throws GuzzleException
     */
    public function searchForInternationalAddress($q, $code = 'NZ', $count = 5)
    {
        $uri = '/international/addresses';

        return $this->call(self::BASE_URI.$uri, [
            'q' => $q,
            'country_code' => $code,
            'count' => $count,
        ]);
    }

    /**
     * Returns the detailed information for a single international address identifier.
     *
     * @param $address_id
     * @return array|bool|float|int|object|string|null
     * @throws GuzzleException
     */
    public function getInternationalAddress($address_id)
    {
        $uri = "/international/addresses/$address_id";

        return $this->call(self::BASE_URI.$uri);
    }

    /**
     * This resource is intended to be used in conjunction with the Get International Address Detail resource.
     *
     * @param $address_id
     * @return array|bool|float|int|object|string|null
     * @throws GuzzleException
     */
    public function getAustralianAddress($address_id)
    {
        $uri = "/australia/addresses/$address_id";

        return $this->call(self::BASE_URI.$uri);
    }
}
