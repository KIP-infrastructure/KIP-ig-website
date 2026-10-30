# Laryngoskopigrad 2026 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Laryngoskopigrad 2026**

## ValueSet: Laryngoskopigrad 2026 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LaryngoskopiDegree2026 | *Version*:2.27.1 |
| Active as of 2022-06-09 | *Computable Name*:LaryngoskopiDegree2026 |

 
Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane 

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
  "id" : "LaryngoskopiDegree2026",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LaryngoskopiDegree2026",
  "version" : "2.27.1",
  "name" : "LaryngoskopiDegree2026",
  "title" : "Laryngoskopigrad 2026",
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
  "description" : "Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/LaryngoskopiDegree",
      "concept" : [{
        "code" : "degree1",
        "display" : "Grad 1: Stemmebånd kan visualiseres i fuld længde"
      },
      {
        "code" : "degree2",
        "display" : "Grad 2: 1/3 af stemmebåndene kan visualiseres"
      },
      {
        "code" : "degree3",
        "display" : "Grad 3: Epiglottis men ikke stemmebånd kan visualiseres"
      },
      {
        "code" : "degree4",
        "display" : "Grad 4: Epiglottis kan ikke visualiseres"
      }]
    }]
  }
}

```
