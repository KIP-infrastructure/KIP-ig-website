# Lokation for tromber, fundet vha. DSA - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Lokation for tromber, fundet vha. DSA**

## ValueSet: Lokation for tromber, fundet vha. DSA 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DSAFundLokation | *Version*:2.27.2 |
| Active as of 2022-06-28 | *Computable Name*:DSAFundLokation |

 
Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA). 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "DSAFundLokation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DSAFundLokation",
  "version" : "2.27.2",
  "name" : "DSAFundLokation",
  "title" : "Lokation for tromber, fundet vha. DSA",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Lokation for tromber, fundet vha. digital subtraktionsangiografi (DSA).",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DSAFindingsLocation",
      "concept" : [{
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
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      }]
    }]
  }
}

```
