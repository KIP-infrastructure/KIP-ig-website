# Intubation - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Intubation**

## ValueSet: Intubation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Intubation | *Version*:2.27.2 |
| Active as of 2022-06-09 | *Computable Name*:Intubation |

 
Resultat af luftvejshåndtering vha. intubation 

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
  "id" : "Intubation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Intubation",
  "version" : "2.27.2",
  "name" : "Intubation",
  "title" : "Intubation",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Resultat af luftvejshåndtering vha. intubation",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Intubation",
      "concept" : [{
        "code" : "max2_dir",
        "display" : "Højest 2 forsøg, seneste ved direkte laryngoskopi"
      },
      {
        "code" : "max2_video",
        "display" : "Højest 2 forsøg, seneste ved videolaryngoskopi"
      },
      {
        "code" : "max2_flex",
        "display" : "Højest 2 forsøg, seneste ved fleksibel skopi"
      },
      {
        "code" : "max2_other",
        "display" : "Højest 2 forsøg seneste ved andet end ovennævnte metoder"
      },
      {
        "code" : "3_or_more",
        "display" : "3 forsøg eller flere uanset metode"
      },
      {
        "code" : "abandon",
        "display" : "Intubation opgivet"
      }]
    }]
  }
}

```
