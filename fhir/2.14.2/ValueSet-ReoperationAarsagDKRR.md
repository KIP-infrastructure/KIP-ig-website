# Reoperation årsager (DKRR) - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reoperation årsager (DKRR)**

## ValueSet: Reoperation årsager (DKRR) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ReoperationAarsagDKRR | *Version*:2.14.2 |
| Active as of 2022-06-01 | *Computable Name*:ReoperationAarsagDKRR |

 
Årsager til reoperation indenfor 1 år (DKRR) 

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
  "id" : "ReoperationAarsagDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ReoperationAarsagDKRR",
  "version" : "2.14.2",
  "name" : "ReoperationAarsagDKRR",
  "title" : "Reoperation årsager (DKRR)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-01T00:00:00+02:00",
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
  "description" : "Årsager til reoperation indenfor 1 år (DKRR)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ReoperationCause",
        "concept" : [
          {
            "code" : "infection",
            "display" : "Infektion"
          },
          {
            "code" : "movement_restriction",
            "display" : "Bevægelsesindskrænkning (artrofibrose)"
          },
          {
            "code" : "meniscus_damage",
            "display" : "Menisk skade"
          },
          {
            "code" : "cartilage_damage",
            "display" : "Brusk skade"
          },
          {
            "code" : "implant_removed",
            "display" : "Implantat fjernet"
          },
          {
            "code" : "cicatricial_tissue",
            "display" : "Arvæv/Cyklop dannelse"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Andet"
          }
        ]
      }
    ]
  }
}

```
