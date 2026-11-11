# Operation kanal - antal (DKRR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operation kanal - antal (DKRR)**

## ValueSet: Operation kanal - antal (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationKanalAntalDKRR | *Version*:2.27.2 |
| Active as of 2022-09-19 | *Computable Name*:OperationKanalAntalDKRR |

 
Operation kanal - antal (DKRR) 

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
  "id" : "OperationKanalAntalDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationKanalAntalDKRR",
  "version" : "2.27.2",
  "name" : "OperationKanalAntalDKRR",
  "title" : "Operation kanal - antal (DKRR)",
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
  "description" : "Operation kanal - antal (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationCanal",
      "concept" : [{
        "code" : "1_canal",
        "display" : "1 kanal"
      },
      {
        "code" : "2_canals",
        "display" : "2 kanaler"
      }]
    }]
  }
}

```
