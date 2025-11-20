# Cytogenetisk risiki Grimwade 2010 [DAMYDA] - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetisk risiki Grimwade 2010 [DAMYDA]**

## ValueSet: Cytogenetisk risiki Grimwade 2010 [DAMYDA] (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CytogeneticRiskGrimwade2010DAMYDA | *Version*:2.14.1 |
| Active as of 2022-07-13 | *Computable Name*:CytogeneticRiskGrimwade2010DAMYDA |

 
Cytogenetiske risiko vurdering i henhold til Grimwade 2010 kriterier [DAMYDA] 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 4 concepts

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
  "id" : "CytogeneticRiskGrimwade2010DAMYDA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CytogeneticRiskGrimwade2010DAMYDA",
  "version" : "2.14.1",
  "name" : "CytogeneticRiskGrimwade2010DAMYDA",
  "title" : "Cytogenetisk risiki Grimwade 2010 [DAMYDA]",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Cytogenetiske risiko vurdering i henhold til Grimwade 2010 kriterier [DAMYDA]",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "high",
            "display" : "Høj (Grimwade 2010)"
          },
          {
            "code" : "normal",
            "display" : "Intermediær (Grimwade 2010)"
          },
          {
            "code" : "low",
            "display" : "Lav (Grimwade 2010)"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
        "concept" : [
          {
            "code" : "UNK",
            "display" : "Uvist"
          }
        ]
      }
    ]
  }
}

```
