# Frekvens læk (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Frekvens læk (DUGA)**

## ValueSet: Frekvens læk (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/FrekvensLaekDUGA | *Version*:2.27.3 |
| Active as of 2024-02-13 | *Computable Name*:FrekvensLaekDUGA |

 
Hvor ofte lækkes urin (DUGA) 

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
  "id" : "FrekvensLaekDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/FrekvensLaekDUGA",
  "version" : "2.27.3",
  "name" : "FrekvensLaekDUGA",
  "title" : "Frekvens læk (DUGA)",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Hvor ofte lækkes urin (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Frekvens",
      "concept" : [{
        "code" : "aldrig",
        "display" : "Aldrig"
      },
      {
        "code" : "ugl-le1",
        "display" : "Ca. 1 gang om ugen eller mindre"
      },
      {
        "code" : "ugl-2-3",
        "display" : "2-3 gange om ugen"
      },
      {
        "code" : "dgl-1",
        "display" : "Ca. 1 gang dagligt"
      },
      {
        "code" : "dgl-ge1",
        "display" : "Flere gange om dagen"
      },
      {
        "code" : "konstant",
        "display" : "Hele tiden"
      }]
    }]
  }
}

```
