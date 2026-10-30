# WOOS - Træning (DSR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WOOS - Træning (DSR)**

## ValueSet: WOOS - Træning (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/WOOSTraeningDSR | *Version*:2.27.1 |
| Active as of 2022-10-07 | *Computable Name*:WOOSTraeningDSR |

 
WOOS - Træning (DSR) 

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
  "id" : "WOOSTraeningDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/WOOSTraeningDSR",
  "version" : "2.27.1",
  "name" : "WOOSTraeningDSR",
  "title" : "WOOS - Træning (DSR)",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "WOOS - Træning (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/WOOS",
      "concept" : [{
        "code" : "no_physiotherapy",
        "display" : "Ingen fysioterapi"
      },
      {
        "code" : "home_training",
        "display" : "Hjemmetræning efter instruks"
      },
      {
        "code" : "supervised_municipality",
        "display" : "Superviseret fysioterapi via kommunen  (træning eller noget af denne foregår hos fysioterapeut i kommunen hvor du bor)"
      },
      {
        "code" : "supervised_hospital",
        "display" : "Superviseret fysioterapi på sygehus/hospital  (træningen eller noget af denne foregår hos fysioterapi på sygehus)"
      }]
    }]
  }
}

```
