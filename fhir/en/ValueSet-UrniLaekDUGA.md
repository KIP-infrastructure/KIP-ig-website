# Urin lækker (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Urin lækker (DUGA)**

## ValueSet: Urin lækker (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/UrniLaekDUGA | *Version*:2.27.3 |
| Active as of 2024-02-13 | *Computable Name*:UrniLaekDUGA |

 
Hvornår lækker urin (DUGA) 

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
  "id" : "UrniLaekDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/UrniLaekDUGA",
  "version" : "2.27.3",
  "name" : "UrniLaekDUGA",
  "title" : "Urin lækker (DUGA)",
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
  "description" : "Hvornår lækker urin (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/HaendelseIndtraeffer",
      "concept" : [{
        "code" : "aldrig",
        "display" : "Lækker aldrig urin"
      },
      {
        "code" : "inden-toilet",
        "display" : "Lækker før jeg kan nå på toilettet"
      },
      {
        "code" : "hoste",
        "display" : "Lækker når jeg hoster eller nyser"
      },
      {
        "code" : "sover",
        "display" : "Lækker når jeg sover"
      },
      {
        "code" : "aktiv",
        "display" : "Lækker når jeg er fysisk aktiv"
      },
      {
        "code" : "efter-toilet",
        "display" : "Lækker når jeg er færdig med at lade vandet og har fået tøj på"
      },
      {
        "code" : "uden-grund",
        "display" : "Lækker uden nogen grund"
      },
      {
        "code" : "altid",
        "display" : "Lækker hele tiden"
      }]
    }]
  }
}

```
