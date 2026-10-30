# Operationsstue (DKR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationsstue (DKR)**

## ValueSet: Operationsstue (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationsstueDKR | *Version*:2.27.1 |
| Active as of 2024-06-10 | *Computable Name*:OperationsstueDKR |

 
Operationsstue (DKR) 

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
  "id" : "OperationsstueDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationsstueDKR",
  "version" : "2.27.1",
  "name" : "OperationsstueDKR",
  "title" : "Operationsstue (DKR)",
  "status" : "active",
  "date" : "2024-06-10T00:00:00+02:00",
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
  "description" : "Operationsstue (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OperatingRoom",
      "concept" : [{
        "code" : "flow",
        "display" : "Flow stue / green house"
      },
      {
        "code" : "conventional",
        "display" : "Konventionel stue"
      }]
    }]
  }
}

```
