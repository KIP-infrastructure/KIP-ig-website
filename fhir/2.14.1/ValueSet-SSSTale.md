# Scandinavian Stroke Scale - Tale - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Scandinavian Stroke Scale - Tale**

## ValueSet: Scandinavian Stroke Scale - Tale (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SSSTale | *Version*:2.14.1 |
| Active as of 2022-06-23 | *Computable Name*:SSSTale |

 
Scandinavian Stroke Scale - Tale 

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
  "id" : "SSSTale",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SSSTale",
  "version" : "2.14.1",
  "name" : "SSSTale",
  "title" : "Scandinavian Stroke Scale - Tale",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "Scandinavian Stroke Scale - Tale",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SSSSpeech",
        "concept" : [
          {
            "code" : "10",
            "display" : "10: ingen afasi"
          },
          {
            "code" : "6",
            "display" : "6: begrænset ordforråd / usammenhængende tale"
          },
          {
            "code" : "3",
            "display" : "3: mere end ja og nej, men korte sætninger"
          },
          {
            "code" : "0",
            "display" : "0: højst ja eller nej"
          }
        ]
      }
    ]
  }
}

```
