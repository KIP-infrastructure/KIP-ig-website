# Planlagt behandling (DAMYDA) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Planlagt behandling (DAMYDA)**

## ValueSet: Planlagt behandling (DAMYDA) (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentScheduledDAMYDA | *Version*:2.16.0 |
| Active as of 2022-07-08 | *Computable Name*:TreatmentScheduledDAMYDA |

 
Planlagt behandling (DAMYDA) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

This value set contains 22 concepts

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
  "id" : "TreatmentScheduledDAMYDA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentScheduledDAMYDA",
  "version" : "2.16.0",
  "name" : "TreatmentScheduledDAMYDA",
  "title" : "Planlagt behandling (DAMYDA)",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-07-08T00:00:00+02:00",
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
  "description" : "Planlagt behandling (DAMYDA)",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
        "concept" : [
          {
            "code" : "L01AA01",
            "display" : "Cyklophosphamid"
          },
          {
            "code" : "L01AA03",
            "display" : "Melfalan"
          },
          {
            "code" : "L01AA09",
            "display" : "Bendamustin"
          },
          {
            "code" : "L01DB01",
            "display" : "Adriamycin (Doxorubicin)"
          },
          {
            "code" : "M05BA08",
            "display" : "Zolendronat (Zoledronsyre)"
          },
          {
            "code" : "M05BA03",
            "display" : "Pamidronat (Pamidronsyre)"
          },
          {
            "code" : "M05BX04",
            "display" : "Denosumab"
          },
          {
            "code" : "L01FX08",
            "display" : "Elotuzumab"
          },
          {
            "code" : "L01FC01",
            "display" : "Daratumumab"
          },
          {
            "code" : "L01FC02",
            "display" : "Isatuximab"
          },
          {
            "code" : "L01XH03",
            "display" : "Panobinostat"
          },
          {
            "code" : "L04AX02",
            "display" : "Thalidomid"
          },
          {
            "code" : "L04AX04",
            "display" : "Lenalidomid"
          },
          {
            "code" : "L04AX06",
            "display" : "Pomalidomid"
          },
          {
            "code" : "L01XG01",
            "display" : "Bortezomib"
          },
          {
            "code" : "L01XG02",
            "display" : "Carfilzomib"
          },
          {
            "code" : "L01XG03",
            "display" : "Ixazomib"
          },
          {
            "code" : "H02",
            "display" : "Steroid (kun steroid, givet som palliation)"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
        "concept" : [
          {
            "code" : "BWG",
            "display" : "Strålebehandling"
          },
          {
            "code" : "BWHA309",
            "display" : "Højdosis melfalan med stamcellestøtte"
          },
          {
            "code" : "BOQF1",
            "display" : "Allogen KMT"
          }
        ]
      },
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
        "concept" : [
          {
            "code" : "other",
            "display" : "Øvrig"
          }
        ]
      }
    ]
  }
}

```
