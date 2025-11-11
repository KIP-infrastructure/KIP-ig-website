# Laryngoskopi grad - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Laryngoskopi grad**

## CodeSystem: Laryngoskopi grad 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/LaryngoskopiDegree | *Version*:2.13.0 |
| Active as of 2022-06-09 | *Computable Name*:LaryngoskopiDegree |

 
Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LaryngoskopiDegree](ValueSet-LaryngoskopiDegree.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "LaryngoskopiDegree",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/LaryngoskopiDegree",
  "version" : "2.13.0",
  "name" : "LaryngoskopiDegree",
  "title" : "Laryngoskopi grad",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Bedst opnåede laryngoskopigrad ved  direkte laryngoskopi efter Cormack & Lehane",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "degree1",
      "display" : "Grad 1:",
      "definition" : "Grad 1: Stemmebånd kan visualiseres i fuld længde"
    },
    {
      "code" : "degree2",
      "display" : "Grad 2:",
      "definition" : "Grad 2: 1/3 af stemmebåndene kan visualiseres"
    },
    {
      "code" : "degree3",
      "display" : "Grad 3:",
      "definition" : "Grad 3: Epiglottis men ikke stemmebånd kan visualiseres"
    },
    {
      "code" : "degree4",
      "display" : "Grad 4:",
      "definition" : "Grad 4: Epiglottis kan ikke visualiseres"
    },
    {
      "code" : "noattempt",
      "display" : "Ikke forsøgt",
      "definition" : "Direkte laryngoskopi ikke forsøgt"
    }
  ]
}

```
