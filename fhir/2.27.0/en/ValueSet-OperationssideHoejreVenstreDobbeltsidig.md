# Operationsside (højre/venstre/dobbeltsidig) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationsside (højre/venstre/dobbeltsidig)**

## ValueSet: Operationsside (højre/venstre/dobbeltsidig) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationssideHoejreVenstreDobbeltsidig | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:OperationssideHoejreVenstreDobbeltsidig |

 
Operationsside (højre/venstre/dobbeltsidig) 

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
  "id" : "OperationssideHoejreVenstreDobbeltsidig",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationssideHoejreVenstreDobbeltsidig",
  "version" : "2.27.0",
  "name" : "OperationssideHoejreVenstreDobbeltsidig",
  "title" : "Operationsside (højre/venstre/dobbeltsidig)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Operationsside (højre/venstre/dobbeltsidig)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "TUL1",
        "display" : "Højre"
      },
      {
        "code" : "TUL2",
        "display" : "Venstre"
      },
      {
        "code" : "TUL3",
        "display" : "Dobbeltsidig/Bilateralt"
      }]
    }]
  }
}

```
