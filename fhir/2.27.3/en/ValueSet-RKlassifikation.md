# R-klassifikation - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **R-klassifikation**

## ValueSet: R-klassifikation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RKlassifikation | *Version*:2.27.3 |
| Active as of 2022-06-08 | *Computable Name*:RKlassifikation |

 
R-klassifikation (Residual tumor) 

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
  "id" : "RKlassifikation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RKlassifikation",
  "version" : "2.27.3",
  "name" : "RKlassifikation",
  "title" : "R-klassifikation",
  "status" : "active",
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "R-klassifikation (Residual tumor)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ResidualTumorClassification",
      "concept" : [{
        "code" : "r0",
        "display" : "R0 - Ingen resttumor"
      },
      {
        "code" : "r1",
        "display" : "R1 - Mikroskopisk resttumor"
      },
      {
        "code" : "r2",
        "display" : "R2 - Makroskopisk resttumor"
      }]
    }]
  }
}

```
