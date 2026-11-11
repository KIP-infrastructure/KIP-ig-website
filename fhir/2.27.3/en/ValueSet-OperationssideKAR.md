# Operationsside (højre/venstre/centralt) (KAR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationsside (højre/venstre/centralt) (KAR)**

## ValueSet: Operationsside (højre/venstre/centralt) (KAR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationssideKAR | *Version*:2.27.3 |
| Active as of 2022-09-27 | *Computable Name*:OperationssideKAR |

 
Operationsside (højre/venstre/centralt) (KAR) 

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
  "id" : "OperationssideKAR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationssideKAR",
  "version" : "2.27.3",
  "name" : "OperationssideKAR",
  "title" : "Operationsside (højre/venstre/centralt) (KAR)",
  "status" : "active",
  "date" : "2022-09-27T00:00:00+02:00",
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
  "description" : "Operationsside (højre/venstre/centralt) (KAR)",
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
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "central",
        "display" : "Centralt"
      }]
    }]
  }
}

```
