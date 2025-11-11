# Dødsårsag (LYFO) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dødsårsag (LYFO)**

## ValueSet: Dødsårsag (LYFO) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagLYFO | *Version*:2.13.0 |
| Active as of 2022-07-18 | *Computable Name*:DoedsaarsagLYFO |

 
Dødsårsag (LYFO) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 5 concepts

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
  "id" : "DoedsaarsagLYFO",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagLYFO",
  "version" : "2.13.0",
  "name" : "DoedsaarsagLYFO",
  "title" : "Dødsårsag (LYFO)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Dødsårsag (LYFO)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CauseOfDeath",
        "concept" : [
          {
            "code" : "therapy_related_progression",
            "display" : "Terapirelateret dødsfald MED sygdomsprogression"
          },
          {
            "code" : "therapy_related",
            "display" : "Terapirelateret dødsfald uden sygdomsprogression"
          },
          {
            "code" : "progressive_disease",
            "display" : "Progressiv sygdom"
          },
          {
            "code" : "other_complete_remissiong",
            "display" : "Anden årsag, død i komplet remission (CR)"
          },
          {
            "code" : "other_not_complete_remissiong",
            "display" : "Anden årsag, IKKE i komplet remision (CR) ved død"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
        "concept" : [
          {
            "code" : "UKN",
            "display" : "Ukendt"
          }
        ]
      }
    ]
  }
}

```
