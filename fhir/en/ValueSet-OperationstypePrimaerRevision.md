# Operationstype (primær/revision) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationstype (primær/revision)**

## ValueSet: Operationstype (primær/revision) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationstypePrimaerRevision | *Version*:2.27.1 |
| Active as of 2022-07-04 | *Computable Name*:OperationstypePrimaerRevision |

 
Operationstype (primær/revision) 

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
  "id" : "OperationstypePrimaerRevision",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationstypePrimaerRevision",
  "version" : "2.27.1",
  "name" : "OperationstypePrimaerRevision",
  "title" : "Operationstype (primær/revision)",
  "status" : "active",
  "date" : "2022-07-04T00:00:00+02:00",
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
  "description" : "Operationstype (primær/revision)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationType",
      "concept" : [{
        "code" : "primary",
        "display" : "Primær"
      },
      {
        "code" : "revision",
        "display" : "Revision"
      }]
    }]
  }
}

```
