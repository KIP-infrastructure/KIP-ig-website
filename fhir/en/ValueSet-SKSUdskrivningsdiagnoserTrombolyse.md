# SKS: Udskrivningsiagnoser for Trombolyse (DAP) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SKS: Udskrivningsiagnoser for Trombolyse (DAP)**

## ValueSet: SKS: Udskrivningsiagnoser for Trombolyse (DAP) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SKSUdskrivningsdiagnoserTrombolyse | *Version*:2.27.2 |
| Active as of 2022-06-28 | *Computable Name*:SKSUdskrivningsdiagnoserTrombolyse |

 
SKS koderne relevante for Trombolyse (DAP) 

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
  "id" : "SKSUdskrivningsdiagnoserTrombolyse",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SKSUdskrivningsdiagnoserTrombolyse",
  "version" : "2.27.2",
  "name" : "SKSUdskrivningsdiagnoserTrombolyse",
  "title" : "SKS: Udskrivningsiagnoser for Trombolyse (DAP)",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "SKS koderne relevante for Trombolyse (DAP)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "DI630",
        "display" : "DI630 - Hjerneinfarkt forårsaget af trombose i præcerebral arterie"
      },
      {
        "code" : "DI631",
        "display" : "DI631 - Hjerneinfarkt forårsaget af emboli i præcerebral arterie"
      },
      {
        "code" : "DI632",
        "display" : "DI632 - Hjerneinfarkt forårsaget af tillukning eller stenose i præcerebral arterie UNS"
      },
      {
        "code" : "DI633",
        "display" : "DI633 - Hjerneinfarkt forårsaget af trombose i cerebral arterie"
      },
      {
        "code" : "DI634",
        "display" : "DI634 - Hjerneinfarkt forårsaget af emboli i cerebral arterie"
      },
      {
        "code" : "DI635",
        "display" : "DI635 - Hjerneinfarkt forårsaget af tillukning eller stenose i cerebral arterie UNS"
      },
      {
        "code" : "DI638",
        "display" : "DI638 - Anden form for hjerneinfarkt"
      },
      {
        "code" : "DI639",
        "display" : "DI639 - Hjerneinfarkt UNS"
      }]
    }]
  }
}

```
