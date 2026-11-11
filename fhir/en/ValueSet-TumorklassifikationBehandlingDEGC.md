# Tumorklassifikation - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Tumorklassifikation**

## ValueSet: Tumorklassifikation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TumorklassifikationBehandlingDEGC | *Version*:2.27.3 |
| Active as of 2022-06-08 | *Computable Name*:TumorklassifikationBehandlingDEGC |

 
Histologisk tumorklassifikation i DEGC (behandling) 

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
  "id" : "TumorklassifikationBehandlingDEGC",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TumorklassifikationBehandlingDEGC",
  "version" : "2.27.3",
  "name" : "TumorklassifikationBehandlingDEGC",
  "title" : "Tumorklassifikation",
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
  "description" : "Histologisk tumorklassifikation i DEGC (behandling)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TumorClassificationHistology",
      "concept" : [{
        "code" : "planocellular",
        "display" : "Planocellulært"
      },
      {
        "code" : "adenocarcinoma",
        "display" : "Adenocarcinom"
      },
      {
        "code" : "other",
        "display" : "Andre"
      },
      {
        "code" : "noresidualtumor",
        "display" : "Ingen resttumor"
      }]
    }]
  }
}

```
