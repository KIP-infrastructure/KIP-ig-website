# Graden af aflukning af anurisme - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Graden af aflukning af anurisme**

## ValueSet: Graden af aflukning af anurisme 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnurismeAflukning | *Version*:2.27.2 |
| Active as of 2022-06-29 | *Computable Name*:AnurismeAflukning |

 
Graden af aflukning af anurisme 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "AnurismeAflukning",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnurismeAflukning",
  "version" : "2.27.2",
  "name" : "AnurismeAflukning",
  "title" : "Graden af aflukning af anurisme",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Graden af aflukning af anurisme",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AneurysmClosure",
      "concept" : [{
        "code" : "full",
        "display" : "Ingen rest"
      },
      {
        "code" : "partial",
        "display" : "Partiel aflukning"
      }]
    }]
  }
}

```
