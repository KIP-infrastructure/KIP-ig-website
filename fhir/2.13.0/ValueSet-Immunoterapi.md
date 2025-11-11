# Immunoterapi - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Immunoterapi**

## ValueSet: Immunoterapi (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Immunoterapi | *Version*:2.13.0 |
| Active as of 2022-07-18 | *Computable Name*:Immunoterapi |

 
Immunoterapi 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 10 concepts

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
  "id" : "Immunoterapi",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Immunoterapi",
  "version" : "2.13.0",
  "name" : "Immunoterapi",
  "title" : "Immunoterapi",
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
  "description" : "Immunoterapi",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "none",
            "display" : "Ingen immunoterapi"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
        "concept" : [
          {
            "code" : "L01FA01",
            "display" : "Rituximab"
          },
          {
            "code" : "L01FA03",
            "display" : "Obinutuzumab"
          },
          {
            "code" : "L01FA02",
            "display" : "Ofatumumab"
          },
          {
            "code" : "L04AA",
            "display" : "MabCampath"
          },
          {
            "code" : "L01FX05",
            "display" : "Brentuximab Vedotin (Adcetris)"
          },
          {
            "code" : "L01FX14",
            "display" : "Polatuzumab Incl evt. Rituximab"
          },
          {
            "code" : "L01FF",
            "display" : "PD(L)1 hæmmere"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentUnspecified",
        "concept" : [
          {
            "code" : "glofitamab",
            "display" : "Bispecifikke el Epcoritamab Incl evt. Rituximab"
          },
          {
            "code" : "Polatuzumab",
            "display" : "Bispecifikke + Polatuzumab Incl evt. Rituximab"
          }
        ]
      }
    ]
  }
}

```
