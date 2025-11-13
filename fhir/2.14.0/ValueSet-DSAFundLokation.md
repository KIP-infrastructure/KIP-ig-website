# Lokation for tromber, fundet vha. DSA - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lokation for tromber, fundet vha. DSA**

## ValueSet: Lokation for tromber, fundet vha. DSA (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DSAFundLokation | *Version*:2.14.0 |
| Active as of 2022-06-28 | *Computable Name*:DSAFundLokation |

 
Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA). 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 11 concepts

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
  "id" : "DSAFundLokation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DSAFundLokation",
  "version" : "2.14.0",
  "name" : "DSAFundLokation",
  "title" : "Lokation for tromber, fundet vha. DSA",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA).",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DSAFindingsLocation",
        "concept" : [
          {
            "code" : "cca",
            "display" : "CCA"
          },
          {
            "code" : "ica",
            "display" : "ICA"
          },
          {
            "code" : "ica-t",
            "display" : "ICA-T"
          },
          {
            "code" : "mca1",
            "display" : "MCA 1"
          },
          {
            "code" : "mca2",
            "display" : "MCA 2"
          },
          {
            "code" : "aca",
            "display" : "ACA"
          },
          {
            "code" : "va",
            "display" : "VA"
          },
          {
            "code" : "ba",
            "display" : "BA"
          },
          {
            "code" : "pca/other",
            "display" : "PCA/Andet"
          },
          {
            "code" : "cervical_dissection",
            "display" : "Cervical dissektion"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "none",
            "display" : "Ingen"
          }
        ]
      }
    ]
  }
}

```
