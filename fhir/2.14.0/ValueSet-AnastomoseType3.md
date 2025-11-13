# Anastomosetype 3 - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anastomosetype 3**

## ValueSet: Anastomosetype 3 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnastomoseType3 | *Version*:2.14.0 |
| Active as of 2022-10-11 | *Computable Name*:AnastomoseType3 |

 
Anastomosetype 3 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 7 concepts

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
  "id" : "AnastomoseType3",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnastomoseType3",
  "version" : "2.14.0",
  "name" : "AnastomoseType3",
  "title" : "Anastomosetype 3",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-11T00:00:00+02:00",
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
  "description" : "Anastomosetype 3",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnastomosisType",
        "concept" : [
          {
            "code" : "end_to_end",
            "display" : "End-to-end"
          },
          {
            "code" : "side_to_end",
            "display" : "Side-to-end"
          },
          {
            "code" : "end_to_side",
            "display" : "End-to-side"
          },
          {
            "code" : "side_to_side",
            "display" : "Side-to-side"
          },
          {
            "code" : "functional_end_to_end",
            "display" : "Funktionel end-to-end"
          },
          {
            "code" : "pouch",
            "display" : "Pouch"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Anden"
          }
        ]
      }
    ]
  }
}

```
