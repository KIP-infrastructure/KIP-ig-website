# Anden blødning (DAP) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anden blødning (DAP)**

## ValueSet: Anden blødning (DAP) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AndenBloedningDAP | *Version*:2.27.1 |
| Active as of 2022-09-02 | *Computable Name*:AndenBloedningDAP |

 
Anden blødning fundet i forbindelse med billeddiagnostisk undersøgelse (DAP) 

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
  "id" : "AndenBloedningDAP",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AndenBloedningDAP",
  "version" : "2.27.1",
  "name" : "AndenBloedningDAP",
  "title" : "Anden blødning (DAP)",
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
  "description" : "Anden blødning fundet i forbindelse med billeddiagnostisk undersøgelse (DAP)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BleedingStroke",
      "concept" : [{
        "code" : "phr_1",
        "display" : "PHr 1"
      },
      {
        "code" : "phr_2",
        "display" : "PHr 2"
      }]
    }]
  }
}

```
