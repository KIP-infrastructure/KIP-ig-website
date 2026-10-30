# R-klassifikation til DEGC - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **R-klassifikation til DEGC**

## ValueSet: R-klassifikation til DEGC 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RKlassifikationTilDegc | *Version*:2.27.1 |
| Active as of 2022-09-21 | *Computable Name*:RKlassifikationTilDegc |

 
R-klassifikation (Residual tumor) til DEGC 

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
  "id" : "RKlassifikationTilDegc",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RKlassifikationTilDegc",
  "version" : "2.27.1",
  "name" : "RKlassifikationTilDegc",
  "title" : "R-klassifikation til DEGC",
  "status" : "active",
  "date" : "2022-09-21T00:00:00+02:00",
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
  "description" : "R-klassifikation (Residual tumor) til DEGC",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ResidualTumorClassification",
      "concept" : [{
        "code" : "r01",
        "display" : "R0/R1 - Ingen synlig resttumor"
      },
      {
        "code" : "r2",
        "display" : "R2 - Makroskopisk resttumor"
      }]
    }]
  }
}

```
