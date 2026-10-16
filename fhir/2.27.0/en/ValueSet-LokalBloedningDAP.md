# Lokal blødning (DAP) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lokal blødning (DAP)**

## ValueSet: Lokal blødning (DAP) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LokalBloedningDAP | *Version*:2.27.0 |
| Active as of 2022-09-02 | *Computable Name*:LokalBloedningDAP |

 
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
  "id" : "LokalBloedningDAP",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LokalBloedningDAP",
  "version" : "2.27.0",
  "name" : "LokalBloedningDAP",
  "title" : "Lokal blødning (DAP)",
  "status" : "active",
  "date" : "2022-09-02T00:00:00+02:00",
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
        "code" : "hi_1",
        "display" : "HI 1"
      },
      {
        "code" : "hi_2",
        "display" : "HI 2"
      },
      {
        "code" : "ph_1",
        "display" : "PH 1"
      },
      {
        "code" : "ph_2",
        "display" : "PH 2"
      }]
    }]
  }
}

```
