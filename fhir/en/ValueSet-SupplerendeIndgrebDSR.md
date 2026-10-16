# Supplerende indgreb (DSR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Supplerende indgreb (DSR)**

## ValueSet: Supplerende indgreb (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SupplerendeIndgrebDSR | *Version*:2.27.0 |
| Active as of 2022-07-04 | *Computable Name*:SupplerendeIndgrebDSR |

 
Supplerende indgreb (DSR) 

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
  "id" : "SupplerendeIndgrebDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SupplerendeIndgrebDSR",
  "version" : "2.27.0",
  "name" : "SupplerendeIndgrebDSR",
  "title" : "Supplerende indgreb (DSR)",
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
  "description" : "Supplerende indgreb (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "cuff_reconstruction",
        "display" : "Cuff rekonstruktion"
      },
      {
        "code" : "tenotomy",
        "display" : "Bicepstenotomi"
      },
      {
        "code" : "tenodesis",
        "display" : "Biceps tenodese"
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
