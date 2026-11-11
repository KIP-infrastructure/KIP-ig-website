# BulkingMateriale (DUGA) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BulkingMateriale (DUGA)**

## ValueSet: BulkingMateriale (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BulkingMaterialeDUGA | *Version*:2.27.2 |
| Active as of 2024-02-14 | *Computable Name*:BulkingMaterialeDUGA |

 
BulkingMateriale (DUGA) 

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
  "id" : "BulkingMaterialeDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BulkingMaterialeDUGA",
  "version" : "2.27.2",
  "name" : "BulkingMaterialeDUGA",
  "title" : "BulkingMateriale (DUGA)",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "BulkingMateriale (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BulkingMaterialeDUGA",
      "concept" : [{
        "code" : "Bulkamid",
        "display" : "Bulkamid"
      },
      {
        "code" : "Deflux",
        "display" : "Deflux"
      },
      {
        "code" : "Macroplastik",
        "display" : "Macroplastik"
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
