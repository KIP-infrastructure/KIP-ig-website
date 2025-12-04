# Dødsårsager [SAH] - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dødsårsager [SAH]**

## ValueSet: Dødsårsager [SAH] (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagSAH | *Version*:2.16.0 |
| Active as of 2022-05-16 | *Computable Name*:DoedsaarsagSAH |

 
Dødsårsager [SAH] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 9 concepts

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
  "id" : "DoedsaarsagSAH",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagSAH",
  "version" : "2.16.0",
  "name" : "DoedsaarsagSAH",
  "title" : "Dødsårsager [SAH]",
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
  "description" : "Dødsårsager [SAH]",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "DI63",
            "display" : "Hjerneinfarkt"
          },
          {
            "code" : "DI61",
            "display" : "Hjerneblødning"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
        "concept" : [
          {
            "code" : "infarction-unspecific",
            "display" : "Hjerneinfarkt og blødning - ingen specifikation"
          },
          {
            "code" : "ami",
            "display" : "Myokardieinfarkt"
          },
          {
            "code" : "pulmonaryembolism",
            "display" : "Lungeemboli"
          },
          {
            "code" : "pneumonia",
            "display" : "Lungebetændelse"
          },
          {
            "code" : "vascular-unspecific",
            "display" : "Anden vaskulær årsag"
          },
          {
            "code" : "other",
            "display" : "Andet"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
        "concept" : [
          {
            "code" : "UNK",
            "display" : "Ukendt"
          }
        ]
      }
    ]
  }
}

```
