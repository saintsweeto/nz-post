# NZ Post
A PHP wrapper for NZ Post API

## ParcelAddress API
[API specification summary](https://anypoint.mulesoft.com/exchange/portals/nz-post-group/b8271f09-2ad8-4e1c-b6b1-322c5727d148/parceladdress-api/minor/1.0/console/summary/)

#### Initialization
```
$parcel = new ParcelAddress(CLIENT_ID, CLIENT_SECRET);
```

#### Search for address
Returns a list of suggested domestic addresses for an address fragment.
```
$parcel->searchForAddress(address, count);
```

#### Get address detail by address id
Returns the detailed information for a single domestic address identifier.
```
$parcel->getAddressByAddressId(address_id');
```

#### Get address detail by dpid
Returns the detailed information for a single dpid.
```
$parcel->getAddressByDpid(dpid);
```

#### Domestic suburbs suggestion
Returns a list of suggested domestic suburbs for a suburb fragment.
```
$parcel->searchForSuburbs(address, count);
```

#### Collection locations
Returns a list of parcel collection points nearest to the coordinates provided.
```
$parcel->getCollectionLocations(lat, long, count);
```

#### Search for international address
Returns a list of suggested addresses for a given country code and address fragment.
```
$parcel->searchForInternationalAddress(address, country_code, count);
```

#### Get international address detail
Returns the detailed information for a single international address identifier.
```
$parcel->getInternationalAddress(address_id);
```

#### Australian address lookup
This resource is intended to be used in conjunction with the Get International Address Detail resource.
```
$parcel->getAustralianAddress(address_id);
```
