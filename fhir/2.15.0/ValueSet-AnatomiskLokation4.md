# Anatomisk lokation 4 - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anatomisk lokation 4**

## ValueSet: Anatomisk lokation 4 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnatomiskLokation4 | *Version*:2.15.0 |
| Active as of 2022-10-19 | *Computable Name*:AnatomiskLokation4 |

 
Anatomisk lokation 4 

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
  "id" : "AnatomiskLokation4",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnatomiskLokation4",
  "version" : "2.15.0",
  "name" : "AnatomiskLokation4",
  "title" : "Anatomisk lokation 4",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-10-19T00:00:00+02:00",
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
  "description" : "Anatomisk lokation 4",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnatomicalLocations",
        "concept" : [
          {
            "code" : "ileocolica_centralt",
            "display" : "Ileocolica centralt"
          },
          {
            "code" : "ileocolica_perifert",
            "display" : "Ileocolica perifert"
          },
          {
            "code" : "a_colica_media_centralt",
            "display" : "A. colica media centralt"
          },
          {
            "code" : "a_colica_media_hoejre",
            "display" : "Højre gren af  a. colica media"
          },
          {
            "code" : "a_colica_media_venstre",
            "display" : "Venstre gren af  a. colica media"
          },
          {
            "code" : "a_mesenterica_inferior",
            "display" : "A. mesenterica inf."
          },
          {
            "code" : "a_colica_sinistra",
            "display" : "A. colica sin."
          },
          {
            "code" : "a_mesenterica_inferior_perifert",
            "display" : "A. mesenterica inf perifert"
          },
          {
            "code" : "aa_sigmoideae",
            "display" : "Aa. sigmoideae"
          },
          {
            "code" : "a_rectalis_superior",
            "display" : "A. rectalis superior"
          }
        ]
      }
    ]
  }
}

```
