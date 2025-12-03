# Leukæmi diagnoser - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Leukæmi diagnoser**

## ValueSet: Leukæmi diagnoser (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDLeukemiaDiagnose | *Version*:2.15.0 |
| Active as of 2022-06-08 | *Computable Name*:PatobankSNOMEDLeukemiaDiagnose |

 
Leukæmi diagnoser 

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
  "id" : "PatobankSNOMEDLeukemiaDiagnose",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/PatobankSNOMEDLeukemiaDiagnose",
  "version" : "2.15.0",
  "name" : "PatobankSNOMEDLeukemiaDiagnose",
  "title" : "Leukæmi diagnoser",
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
  "description" : "Leukæmi diagnoser",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PatobankSNOMED",
        "concept" : [
          {
            "code" : "M98963",
            "display" : "M98963: AML m. t(8;21); RUNX1-RUNX1T1"
          },
          {
            "code" : "M98713",
            "display" : "M98713: AML m. inv(16) el. t(16;16); CBFß-MYH11"
          },
          {
            "code" : "M98663",
            "display" : "M98663: akut promyelocyt leukæmi m. t(15;17); PML-RARa"
          },
          {
            "code" : "M98973",
            "display" : "M98973: AML m. t(9;11); KMT2A-MLLT3"
          },
          {
            "code" : "M98953",
            "display" : "M98953: AML m. myelodysplasi-relaterede forandringer"
          },
          {
            "code" : "M99203",
            "display" : "M99203: terapirelateret myeloid neoplasi"
          },
          {
            "code" : "M98723",
            "display" : "M98723: akut myeloid leukæmi, minimalt differentieret"
          },
          {
            "code" : "M98733",
            "display" : "M98733: akut myeloid leukæmi, uden modning"
          },
          {
            "code" : "M98743",
            "display" : "M98743: akut myeloid leukæmi, med modning"
          },
          {
            "code" : "M98673",
            "display" : "M98673: akut myelomonocytær leukæmi"
          },
          {
            "code" : "M98913",
            "display" : "M98913: akut monoblastisk/monocytær leukæmi"
          },
          {
            "code" : "M98403",
            "display" : "M98403: erytroleukæmi (FAB-type M6)"
          },
          {
            "code" : "M99103",
            "display" : "M99103: akut megakaryoblastleukæmi"
          },
          {
            "code" : "M98703",
            "display" : "M98703: akut basofil leukæmi"
          },
          {
            "code" : "M99313",
            "display" : "M99313: panmyeloid proliferation med myelofibrose"
          },
          {
            "code" : "M99303",
            "display" : "M99303: myeloidt sarkom"
          },
          {
            "code" : "M98613",
            "display" : "M98613: akut myeloid leukæmi"
          },
          {
            "code" : "M98013",
            "display" : "M98013: akut udifferentieret leukæmi"
          },
          {
            "code" : "M98053",
            "display" : "M98053: akut leukæmi af ubestemmelig celletype"
          },
          {
            "code" : "M98353",
            "display" : "M98353: precursor B-lymfoblastisk leukæmi"
          },
          {
            "code" : "M98373",
            "display" : "M98373: precursor T-lymfoblastisk leukæmi"
          },
          {
            "code" : "M99833",
            "display" : "M99833: MDS med overskud af blaster"
          }
        ]
      }
    ]
  }
}

```
