# Operationstype (primær/sekundær) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationstype (primær/sekundær)**

## ValueSet: Operationstype (primær/sekundær) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationstypePrimaerSekundaer | *Version*:2.27.3 |
| Active as of 2022-07-20 | *Computable Name*:OperationstypePrimaerSekundaer |

 
Operationstype (primær/sekundær) 

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
  "id" : "OperationstypePrimaerSekundaer",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationstypePrimaerSekundaer",
  "version" : "2.27.3",
  "name" : "OperationstypePrimaerSekundaer",
  "title" : "Operationstype (primær/sekundær)",
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
  "description" : "Operationstype (primær/sekundær)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationType",
      "concept" : [{
        "code" : "primary",
        "display" : "Primær"
      },
      {
        "code" : "secondary",
        "display" : "Sekundær"
      }]
    }]
  }
}

```
