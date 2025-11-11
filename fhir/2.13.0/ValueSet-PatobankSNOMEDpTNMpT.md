# Patobank SNOMED: pTNM klassifikation, pT - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patobank SNOMED: pTNM klassifikation, pT**

## ValueSet: Patobank SNOMED: pTNM klassifikation, pT (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDpTNMpT | *Version*:2.13.0 |
| Active as of 2022-06-08 | *Computable Name*:PatobankSNOMEDpTNMpT |

 
SNOMED koderne relevante pT tillægskoder 

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
  "id" : "PatobankSNOMEDpTNMpT",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDpTNMpT",
  "version" : "2.13.0",
  "name" : "PatobankSNOMEDpTNMpT",
  "title" : "Patobank SNOMED: pTNM klassifikation, pT",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-06-08T00:00:00+02:00",
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
  "description" : "SNOMED koderne relevante pT tillægskoder",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
        "concept" : [
          {
            "code" : "AEF1810",
            "display" : "pTis (ÆF1810)"
          },
          {
            "code" : "AEF1820",
            "display" : "pT0 (ÆF1820)"
          },
          {
            "code" : "AEF1830",
            "display" : "pT1 (ÆF1830)"
          },
          {
            "code" : "AEF1831",
            "display" : "pT1a (ÆF1831)"
          },
          {
            "code" : "AEF1832",
            "display" : "pT1b (ÆF1832)"
          },
          {
            "code" : "AEF1840",
            "display" : "pT2 (ÆF1840)"
          },
          {
            "code" : "AEF1850",
            "display" : "pT3 (ÆF1850)"
          },
          {
            "code" : "AEF1860",
            "display" : "pT4 (ÆF1860)"
          },
          {
            "code" : "AEF1861",
            "display" : "pT4a (ÆF1861)"
          },
          {
            "code" : "AEF1862",
            "display" : "pT4b (ÆF1862)"
          },
          {
            "code" : "AEF1870",
            "display" : "pTx (ÆF1870)"
          }
        ]
      }
    ]
  }
}

```
