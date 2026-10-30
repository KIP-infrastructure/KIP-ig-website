# Lokal blødning Trombolyse - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lokal blødning Trombolyse**

## ValueSet: Lokal blødning Trombolyse 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LokalBloedningTrombolyse | *Version*:2.27.1 |
| Active as of 2026-09-07 | *Computable Name*:LokalBloedningTrombolyse |

 
Lokal blødning fundet i forbindelse med billeddiagnostisk undersøgelse (DAP) 

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
  "id" : "LokalBloedningTrombolyse",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LokalBloedningTrombolyse",
  "version" : "2.27.1",
  "name" : "LokalBloedningTrombolyse",
  "title" : "Lokal blødning Trombolyse",
  "status" : "active",
  "date" : "2026-09-07T00:00:00+02:00",
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
  "description" : "Lokal blødning fundet i forbindelse med billeddiagnostisk undersøgelse (DAP)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BleedingStroke",
      "concept" : [{
        "code" : "hi_1"
      },
      {
        "code" : "hi_2"
      },
      {
        "code" : "ph_1"
      },
      {
        "code" : "ph_2"
      }]
    }]
  }
}

```
