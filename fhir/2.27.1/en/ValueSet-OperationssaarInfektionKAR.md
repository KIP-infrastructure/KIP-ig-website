# Operationssår infektion (KAR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationssår infektion (KAR)**

## ValueSet: Operationssår infektion (KAR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationssaarInfektionKAR | *Version*:2.27.1 |
| Active as of 2022-09-27 | *Computable Name*:OperationssaarInfektionKAR |

 
Operationssår infektion (KAR) 

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
  "id" : "OperationssaarInfektionKAR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationssaarInfektionKAR",
  "version" : "2.27.1",
  "name" : "OperationssaarInfektionKAR",
  "title" : "Operationssår infektion (KAR)",
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
  "description" : "Operationssår infektion (KAR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "superficial_subcutaneous_infection",
        "display" : "overfladisk / subcutan infektion (ved antibiotika eller operation)"
      },
      {
        "code" : "deep_prosthesis_infection",
        "display" : "dyb / protese infektion (ved antibiotika eller operation)"
      }]
    }]
  }
}

```
