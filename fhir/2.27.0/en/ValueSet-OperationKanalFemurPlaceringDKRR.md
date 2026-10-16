# Operation kanal - femur, placering (DKRR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operation kanal - femur, placering (DKRR)**

## ValueSet: Operation kanal - femur, placering (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationKanalFemurPlaceringDKRR | *Version*:2.27.0 |
| Active as of 2022-09-19 | *Computable Name*:OperationKanalFemurPlaceringDKRR |

 
Operation kanal - femur, placering (DKRR) 

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
  "id" : "OperationKanalFemurPlaceringDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationKanalFemurPlaceringDKRR",
  "version" : "2.27.0",
  "name" : "OperationKanalFemurPlaceringDKRR",
  "title" : "Operation kanal - femur, placering (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Operation kanal - femur, placering (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationCanal",
      "concept" : [{
        "code" : "transtibial",
        "display" : "Transtibial"
      },
      {
        "code" : "anatomical",
        "display" : "Anatomisk"
      }]
    }]
  }
}

```
