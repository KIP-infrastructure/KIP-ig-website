# Operationer (DKRR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationer (DKRR)**

## ValueSet: Operationer (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationerDKRR | *Version*:2.27.1 |
| Active as of 2022-09-19 | *Computable Name*:OperationerDKRR |

 
Operationer (DKRR) 

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
  "id" : "OperationerDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationerDKRR",
  "version" : "2.27.1",
  "name" : "OperationerDKRR",
  "title" : "Operationer (DKRR)",
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
  "description" : "Operationer (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnatomicalLocations",
      "concept" : [{
        "code" : "acl",
        "display" : "ACL"
      },
      {
        "code" : "pcl",
        "display" : "PCL"
      },
      {
        "code" : "mcl",
        "display" : "MCL"
      },
      {
        "code" : "lcl",
        "display" : "LCL"
      },
      {
        "code" : "plc",
        "display" : "PLC"
      },
      {
        "code" : "lateral_meniscus",
        "display" : "Laterale menisk"
      },
      {
        "code" : "medial_meniscus",
        "display" : "Mediale menisk"
      },
      {
        "code" : "cartilage",
        "display" : "Bruskskade"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "transplant",
        "display" : "Optransplantering før ACL"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
