# Laryngoskopigrad - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Laryngoskopigrad**

## ValueSet: Laryngoskopigrad (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LaryngoskopiDegree | *Version*:2.14.1 |
| Active as of 2022-06-09 | *Computable Name*:LaryngoskopiDegree |

 
Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "LaryngoskopiDegree",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LaryngoskopiDegree",
  "version" : "2.14.1",
  "name" : "LaryngoskopiDegree",
  "title" : "Laryngoskopigrad",
  "status" : "active",
  "experimental" : true,
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
  "description" : "Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/LaryngoskopiDegree",
        "concept" : [
          {
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
          },
          {
            "code" : "noattempt",
            "display" : "Direkte laryngoskopi ikke forsøgt"
          }
        ]
      }
    ]
  }
}

```
