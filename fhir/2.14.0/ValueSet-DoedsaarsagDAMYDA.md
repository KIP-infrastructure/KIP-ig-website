# Dødsårsager [DAMYDA] - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dødsårsager [DAMYDA]**

## ValueSet: Dødsårsager [DAMYDA] (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagDAMYDA | *Version*:2.14.0 |
| Active as of 2022-05-16 | *Computable Name*:DoedsaarsagDAMYDA |

 
Dødsårsager [DAMYDA] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 6 concepts

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
  "id" : "DoedsaarsagDAMYDA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagDAMYDA",
  "version" : "2.14.0",
  "name" : "DoedsaarsagDAMYDA",
  "title" : "Dødsårsager [DAMYDA]",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Dødsårsager [DAMYDA]",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CauseOfDeath",
        "concept" : [
          {
            "code" : "progressive_disease",
            "display" : "Progressiv Sygdom"
          },
          {
            "code" : "uremia",
            "display" : "Uræmi"
          },
          {
            "code" : "infection",
            "display" : "Infektion"
          },
          {
            "code" : "bleeding",
            "display" : "Blødning"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
        "concept" : [
          {
            "code" : "other",
            "display" : "Død af anden årsag"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
        "concept" : [
          {
            "code" : "UNK",
            "display" : "Usikker dødsårsag"
          }
        ]
      }
    ]
  }
}

```
